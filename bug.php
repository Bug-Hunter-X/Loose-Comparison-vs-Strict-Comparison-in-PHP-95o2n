function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false; 
}

function bar(){
  var a = 1;
  var b = '1';
  if(foo(a,b)){
    console.log('a and b are equal');
  }else{
    console.log('a and b are not equal');
  }
}
bar();
