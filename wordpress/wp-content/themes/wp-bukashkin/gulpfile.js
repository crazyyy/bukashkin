var basePaths = {
    src: 'assets/',
    dest: './',
    cache: 'application/templates_c/*.php'
};
var paths = {
    images: {
        src: basePaths.src + 'img/**',
        dest: basePaths.dest + 'img/'
    },
    scripts: {
        src: basePaths.src + 'js/',
        dest: basePaths.dest + 'js/'
    },
    styles: {
        src: basePaths.src + 'sass/',
        dest: basePaths.dest + 'css/'
    },
    fonts: {
        src: basePaths.src + 'fonts/',
        dest: basePaths.dest + 'fonts/'
    },
    sprite: {
        src: basePaths.src + 'sprite/*'
    }
};
var appFiles = {
    styles: paths.styles.src + '*.scss',
    scripts: [paths.scripts.src + '*.js']
};
var spriteConfig = {
    imgName: 'sprite.png',
    cssName: '_sprite.scss',
    imgPath: '../img/sprite.png' // Gets put in the css
};
var     gulp        =       require('gulp'),
        gutil       =       require('gulp-util'),
        es          =       require('event-stream'), /* ALARM */
        
//         /* ALARM */
//        wait        =       require('gulp-wait'), /* ALARM */ 
        plugins     =       require("gulp-load-plugins")({
                                pattern: ['gulp-*', 'gulp.*'],
                                replaceString: /\bgulp[\-.]/
                            })
        livereload = require('gulp-livereload');

var isProduction    = true,
    sassStyle       = 'compressed';

if (gutil.env.dev === true) {
    sassStyle       =   'nested',
    isProduction    =   false;
}

var changeEvent = function(evt) {
    gutil.log('File', gutil.colors.cyan(evt.path.replace(new RegExp('/.*(?=/' + basePaths.src + ')/'), '')), 'was', gutil.colors.magenta(evt.type));
};

gulp.task('css', function () {
    var sassFiles = gulp.src(appFiles.styles)
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.sass({
            errLogToConsole:    true,
            outputStyle:        sassStyle
        }))
        .on('error', function(err){
            new gutil.PluginError('CSS', err, {showStack: true}),
            gutil.beep();
        })
        .pipe(plugins.size({showFiles:true}))
        .pipe(plugins.sourcemaps.write('/maps/'))
        .pipe(livereload())
        .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('style', function () {
    var cssFiles = gulp.src(paths.styles.dest+'*.css')
    .pipe(plugins.autoprefixer({
        browsers: ['> 1%', 'last 4 versions', 'safari 5', 'ie 8', 'Firefox >= 20', 'Opera 12.1'],
        cascade: false
    }))
    .pipe(plugins.combineMediaQueries({
        log: true
    }))
    .pipe(plugins.dedupe()) 
    .pipe(plugins.sass({
        errLogToConsole:    true,
        outputStyle:        sassStyle
    }))
    .pipe(plugins.size({showFiles:true}))
    .pipe(livereload())
    .pipe(gulp.dest(paths.styles.dest));
});


gulp.task('scripts', function(){
    gulp.src(appFiles.scripts)
        .pipe(plugins.concat('app.js'))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(isProduction ? plugins.uglify() : gutil.noop())
        .pipe(plugins.size({showFiles:true}))
        .pipe(livereload())
        .pipe(gulp.dest(paths.scripts.dest));
});

gulp.task('image', function() {
    return gulp.src(paths.images.src)
        .pipe(plugins.cache(
            plugins.imageOptimization({ 
                optimizationLevel: 3, 
                progressive: true, 
                interlaced: true 
            })
        ))
        .pipe(gulp.dest(paths.images.dest))
        .pipe(livereload())
        .pipe(plugins.size({showFiles:true}));
});

gulp.task('webp', function () {
    return gulp.src(paths.images.src)
        .pipe(plugins.webp())
        .pipe(gulp.dest(paths.images.dest+'webp/'))
        .pipe(plugins.size({showFiles:true}));
});

gulp.task('sprite', function () {
    var spriteData = gulp.src(paths.sprite.src).pipe(plugins.spritesmith({
        imgName: spriteConfig.imgName,
        cssName: spriteConfig.cssName,
        imgPath: spriteConfig.imgPath,
        cssVarMap: function (sprite) {
            sprite.name = 'sprite-' + sprite.name;
        }
    }));
    spriteData.img
        .pipe(plugins.size({showFiles:true}))
        .pipe(plugins.cache(
            plugins.imageOptimization({ 
                optimizationLevel: 3, 
                progressive: true, 
                interlaced: true 
            })
        ))
        .pipe(gulp.dest(paths.images.dest))
        .pipe(plugins.size({showFiles:true}))
        .pipe(plugins.webp())
        .pipe(gulp.dest(paths.images.dest+'webp/'))
        .pipe(plugins.size({showFiles:true}));
    spriteData.css.pipe(gulp.dest(paths.styles.src));
});

gulp.task('clearcache', function () {
    return gulp.src(basePaths.cache, {read: false})
        .pipe(plugins.wait(500))
        .pipe(plugins.rimraf());
});

gulp.task('watch', ['sprite', 'clearcache', 'css', 'style', 'scripts', 'image', 'webp'], function(){
    livereload.listen();
    gulp.watch(appFiles.styles, ['css', 'style', 'clearcache']).on('change', function(evt) {
        changeEvent(evt);
    });
    gulp.watch(paths.scripts.src + '*.js', ['scripts', 'clearcache']).on('change', function(evt) {
        changeEvent(evt);
    });
    gulp.watch(paths.sprite.src, ['sprite', 'css', 'style', 'clearcache']).on('change', function(evt) {
        changeEvent(evt);
    });
    gulp.watch(paths.images.src, ['image', 'webp', 'clearcache']).on('change', function(evt) {
        changeEvent(evt);
    });
});

gulp.task('default', ['css', 'prefixr', 'scripts', 'image', 'clearcache']);