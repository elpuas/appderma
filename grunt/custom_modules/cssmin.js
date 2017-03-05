exports.task = {
  my_target: {
    files: [{
      expand: true,
      cwd: '../assets/css/',
      src: [ '*.css', '!*.min.css' ], // 1
      dest: '../assets/css/',
      ext: '.min.css'
    }]
  }
};
