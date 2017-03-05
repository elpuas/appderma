exports.task = {
  dist: {
    options: {
      style: 'expanded',
      lineNumbers: true, // 1
      sourcemap: 'none'
    },
    files: [{
      expand: true, // 2
      cwd: '../assets/css/sass',
      src: [ '**/*.scss' ],
      dest: '../assets/css',
      ext: '.css'
    }]
  }
};
