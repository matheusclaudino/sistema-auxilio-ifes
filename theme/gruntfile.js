module.exports = function(grunt) {

  // Libs
  var jquery = 'build/js/lib/jquery.min.js';
  var modernizr = 'build/js/lib/modernizr.min.js';
  var bootstrap = 'build/js/lib/bootstrap.min.js';

  // Main JS
  var mainjs = 'build/js/main.js';
  

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    watch: {
      scripts: {
        files: ['**/*.js', '**/*.scss', '**/*.html', '**/*.php'],
        tasks: ['concat', 'uglify', 'sass', 'concat_css', 'cssmin', 'cleancss'],
        options: {
          spawn: false,
          livereload: true 
        },
      },
    }, // Watch

    concat: {
      options: {
        separator: '\n\n\n'
      },
      dist: {
        src: [bootstrap, mainjs],
        dest: 'js/main.js'
      }
    }, // concat

    uglify: {
      options: {
        banner: '/*! By Luiz Venturote ;) */\n'
      },
      build: {
        src: 'js/main.js',
        dest: 'js/main.min.js'
      }
    }, // uglify

    sass: {                            
      dist: {               
        options: {                    
          style: 'expanded'
        },
        files: {                  
          'css/cache-style.css': 'build/scss/style.scss'
        }
      }
    }, // sass

     concat_css: {
      all: {
        src: ['css/lib/bootstrap.min.css', 'css/cache-style.css'],
        dest: 'css/style.css'
      },
    },

    cssmin: {
      add_banner: {
        options: {
          banner: '/* By Luiz Venturote ;) */'
        },
        files: {
          'css/style.min.css': ['css/style.css']
        }
      }
    }, // cssmin

    clean: {
      concatcss: {
        src: ['css/cache-style.css', '.sass-cache']
      }
    } // clean

  });


  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-concat-css');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'concat', 'sass', 'cssmin', 'clean', 'concat_css']);
  grunt.registerTask('cleancss', ['clean:concatcss']);

};