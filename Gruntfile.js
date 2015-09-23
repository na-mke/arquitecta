module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

<<<<<<< HEAD
    // settings
    temp: '.temp',

    sass: {
      options: {
        includePaths: ['<%= temp %>/bower_components/foundation/scss'],
      },
      dist: {
        options: {
          outputStyle: 'compressed',
        },
        files: {
          '<%= temp %>/css/_style.css': 'scss/style.scss',
        },
      },
    },

    autoprefixer: {
      options: {
        browsers: ['last 3 versions','> 5%','Firefox ESR','ie 9'],
      },
      target: {
        expand: true,
        flatten: true,
        src: '<%= temp %>/css/*.css',
        dest: '<%= temp %>/css/',
      },
=======
    sass: {
      options: {
        includePaths: ['.temp/bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          '.temp/_style.scss': 'scss/style.scss'
        }
      }
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
    },

    copy: {
      scripts: {
        expand: true,
<<<<<<< HEAD
        cwd: '<%= temp %>/bower_components/',
        src: '**/*.js',
        dest: '<%= temp %>/js',
=======
        cwd: '.temp/bower_components/',
        src: '**/*.js',
        dest: '.temp/js'
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
      },

      maps: {
        expand: true,
<<<<<<< HEAD
        cwd: '<%= temp %>/bower_components/',
        src: '**/*.map',
        dest: '<%= temp %>/js',
      },
=======
        cwd: '.temp/bower_components/',
        src: '**/*.map',
        dest: '.temp/js'
      }
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
    },

    uglify: {
      dist: {
        files: {
<<<<<<< HEAD
          'js/modernizr/modernizr.min.js': ['<%= temp %>/js/modernizr/modernizr.js'],
          '<%= temp %>/js/infrastrukt.min.js': ['js/infrastrukt.js'],
        },
      },
=======
          'js/modernizr/modernizr.min.js': ['.temp/js/modernizr/modernizr.js'],
          '.temp/js/arquitecta.min.js': ['js/arquitecta.js']
        }
      }
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
    },

    concat: {
      js: {
        options: {
<<<<<<< HEAD
          separator: ';',
        },
        src: [
          '<%= temp %>/js/foundation/js/foundation.min.js',
          '<%= temp %>/js/infrastrukt.min.js',
        ],
        dest: 'js/app.js',
=======
          separator: ';'
        },
        src: [
          '.temp/js/foundation/js/foundation.min.js',
          '.temp/js/arquitecta.min.js'
        ],
        dest: 'js/app.js'
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
      },
      css: {
        src: [
            'scss/theme/_comment-block.scss',
<<<<<<< HEAD
            '<%= temp %>/css/_style.css',
        ],
        dest: 'style.css',
      },
=======
            '.temp/_style.scss'
        ],
        dest: 'style.css'
      }
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },
<<<<<<< HEAD
      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass','copy','uglify','concat'],
        options: {
          livereload: 35729,
        },
      },
      php: {
        files: ['**/*.php'],
        options: {
          livereload: 35729,
        },
      },
    },
=======

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass', 'copy' , 'uglify', 'concat']
      }
    }
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
<<<<<<< HEAD
  grunt.loadNpmTasks('grunt-autoprefixer');

  grunt.registerTask('build', ['sass', 'autoprefixer', 'copy', 'uglify', 'concat']);
  grunt.registerTask('default', ['watch', 'build']);
};
=======

  grunt.registerTask('build', ['sass', 'copy', 'uglify', 'concat']);
  grunt.registerTask('default', ['watch','build']);
};
>>>>>>> 4203d01e3740125c1ddccb117486f96198e1092f
