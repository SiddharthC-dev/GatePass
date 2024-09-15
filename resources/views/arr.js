function prime(n) {
    if (n == 1 || n == 0) return false;
    for (let index = 2; index < n; index++) {
        if (n % index == 0) return false;
    }
    return true;
}

var arr = [14,12,23,4,10,7,10,12,9,14,2,14];
   
   for(let i = 0; i < arr.length; i += 2)
   {
    if(prime(arr[i] + arr[i+1]))
       {
            var tmp = arr[i];
            arr[i] = arr[i+1];
            arr[i+1] = tmp;
        }
   };
console.log(arr);