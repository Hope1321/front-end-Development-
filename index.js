const cutpice= function(fruits){
    return fruits*4;
}
const fruitprocess= function(apples, orange){
    const applepices= cutpice(apples);
    const orangepices= cutpice(orange);
    const juice = 'juice with {applepices} pieces of apple and ${orangepieces} pieces of orange.';
    return juice; 
};
console.log(fruitprocess(2 ,3));