### ES2019
Array.flat()

会递归拍片一个数组，数组中的空元素会被删除。

兼容性问题

### js
1

```
function flatten(arr){
    return arr.toString().split(",");
}
```
缺点：

对象类型的数据无法输出;

只适合都是数字的数组

2
```
function flatten(arr){
    let newArr=[];
    function flat(array){
        for(var value of array){
            if(Array.isArray(value){
                flat(value);
            }else{
                newArr.push(value);
            }
        }
    }
    flat(arr);
    return newArr;
}
```
3
```
function flatten(arr){
    while(arr.some(item=>Array.isArray(item))){
        arr=[].concat(...arr);
    }
}
```
4

```
const flatten = arr => 
arr.reduce((pre, cur) => Array.isArray(cur) ? [...pre, ...flatten(cur)] : [...pre, cur], [])
```
reduce((pre,cur,index,arr)=>{},[]);

```
(pre,cur,index,arr)=>{
    pre:上一次操作的元素;
    cur:当前正在操作的元素;
    index:当前正在操作的元素的下标；
    arr:操作的数组；
}
```
[]:初始值
