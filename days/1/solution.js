let a=await Deno.readTextFile("./inputs/input.txt"),w=console.log
let[k,v,m]=a.split`\n\n`.map(e=>eval(e.split`\n`.join('+'))).sort((a,b)=>b-a);w(k);w(k+v+m)