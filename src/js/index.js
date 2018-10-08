export default function bar() {
  let foo = 0
  for (let i = 0; i < 5; i++)
    foo++
  return foo
}

console.log(bar())