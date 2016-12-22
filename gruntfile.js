module.exports = function(grunt) {

    // Configure tasks
      grunt.initConfig({

  		pkg: grunt.file.readJSON('package.json'),

        sass: {
          build: {
            options: {
              style: 'expanded',
              sourcemap: 'none'
            },
            files: {
              'root/source/style.css': ['root/source/styles.scss'],
            }
          },

          dist: {
            options: {
              style: 'compressed',
              sourcemap: 'none'
            },
            files: {
              'root/source/styles-min.css': ['root/source//styles.scss'],
            }
            },
          },


        watch: {
          css: {
            files: '**/*.scss',
            tasks: ['sass']
          }
        }

    });


    // Load the plugins
      grunt.loadNpmTasks('grunt-sass');
      grunt.loadNpmTasks('grunt-contrib-sass');
      grunt.loadNpmTasks('grunt-contrib-watch');


    // task setup
      grunt.registerTask('default', ['sass:build']);
      grunt.registerTask('build', ['sass:dist']);

};
