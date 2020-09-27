let routes = require('./routes.json');

///route('home', ['1'])
export default function () {
  let args = Array.prototype.slice.call(arguments);
  let name = args.shift();

  /*function (str) {
          if (str[0] == '{') {
            return args.shift();
          } else {
            return str;
          }
        }*/

  if (routes[name] === undefined) {
    console.log('Error route');
  } else {
    return '/' +
      routes[name]
        .split('/')
        .map(str => str[0] == "{" ? args.shift() : str)
        .join('/')
      ;
  }
}
