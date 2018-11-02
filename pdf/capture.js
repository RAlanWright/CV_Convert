var fs = require('fs'),
  args = require('system').args,
  page = require('webpage').create();

page.content = fs.read(args[1]);

page.viewportSize = {
  width: 1920,
  height: 1080
};

page.paperSize = {
  format: 'A2',
  orientation: 'portrait',
  margin: '1cm'
};

window.setTimeout(function () {
  page.render(args[1]);
  phantom.exit();
}, 1000);
