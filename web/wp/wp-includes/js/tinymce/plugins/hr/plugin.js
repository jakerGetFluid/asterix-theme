(function () {
var hr = (function () {
<<<<<<< HEAD
  'use strict';

  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

  var register = function (editor) {
    editor.addCommand('InsertHorizontalRule', function () {
      editor.execCommand('mceInsertContent', false, '<hr />');
    });
  };
  var $_cqh592cnjjgwebvk = { register: register };

  var register$1 = function (editor) {
    editor.addButton('hr', {
      icon: 'hr',
      tooltip: 'Horizontal line',
      cmd: 'InsertHorizontalRule'
    });
    editor.addMenuItem('hr', {
      icon: 'hr',
      text: 'Horizontal line',
      cmd: 'InsertHorizontalRule',
      context: 'insert'
    });
  };
  var $_13g834cojjgwebvl = { register: register$1 };

  global.add('hr', function (editor) {
    $_cqh592cnjjgwebvk.register(editor);
    $_13g834cojjgwebvl.register(editor);
  });
  function Plugin () {
  }

  return Plugin;

=======
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var register = function (editor) {
      editor.addCommand('InsertHorizontalRule', function () {
        editor.execCommand('mceInsertContent', false, '<hr />');
      });
    };
    var Commands = { register: register };

    var register$1 = function (editor) {
      editor.addButton('hr', {
        icon: 'hr',
        tooltip: 'Horizontal line',
        cmd: 'InsertHorizontalRule'
      });
      editor.addMenuItem('hr', {
        icon: 'hr',
        text: 'Horizontal line',
        cmd: 'InsertHorizontalRule',
        context: 'insert'
      });
    };
    var Buttons = { register: register$1 };

    global.add('hr', function (editor) {
      Commands.register(editor);
      Buttons.register(editor);
    });
    function Plugin () {
    }

    return Plugin;

>>>>>>> develop
}());
})();
