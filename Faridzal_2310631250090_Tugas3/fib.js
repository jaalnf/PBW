function fibonacci(n) {
    let Fib = [0, 1];
    for (let i = 2; i < n; i++) {
        Fib[i] = Fib[i - 1] + Fib[i - 2];
    }
    return Fib;
}

let n = 10;
console.log(fibonacci(n));

alert(`Deret Fibonacci`)