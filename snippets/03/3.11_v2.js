// Basket.js

// - Basket is class is made to contain other class objects.

/**
 * Basket.js
 * 
 * Programmer: Eric Hepperle
 * Date 2022-11-23
 * 
 * Purpose: Basket is a class that can hold other objects
 */

class Basket {

  constructor(
    contents,
    units,
    length,
    width,
    depth,
    area,
    volume,
    weight
  ) {
    this.contents = contents
    this.units = units
    this.length = length
    this.width = width
    this.depth = depth
    this.area = area
    this.volume = volume
    this.weight = weight
  }

  setContents(newContents) {
    this.contents = newContents
  }
  addContents(newContents) {
    this.contents.push(newContents)
  }

  calcArea() {
    let area = this.width * this.length
    return `${area} ${this.units}`
  }

  getURL() {
    return window.document.URL
  }

  getContentNames() {
    let out = ''
    this.contents.forEach(item => {
      out += item.name + ', '
    })
    return out
  }

}

export default Basket




// script.js

/**
 * Practice: Making classes and objects
 *
 * - Find a type of object you have more than one of in your house (eg. clothing, writing tools, etc).
 * - Create a class describing this object type - its properties and methods.
 * - Create several objects using the class.
 * - Test the objecs by calling their properties and using their methods in the console.
 */

/*
Eric Hepperle
2022-11-23

*/

import Rag from './Rag.js'
import Basket from './Basket.js'

const rag1 = new Rag(
  "rag1 - The First!",
  "Red",
  8,
  8,
)

const rag2 = new Rag(
  "Rag2",
  "blue",
  32,
  32,
)

const rag3 = new Rag(
  "Rag3",
  'yellow',
  9,
  14,
)

const rags = [rag1, rag2, rag3]

rags.forEach(rag => {
  rag.logRagInfo()
})

const basket1 = new Basket(
  ['some stuff'],
  'cm',
  17,
  13,
  9,
  '',
  '',
  '',
)

// console.log("basket1:", basket1)

console.log("basket1.contents START:", basket1.contents) // ['some stuff]
basket1.contents.push(...rags)
console.log("basket1.contents:", basket1.contents) // ['some stuff', Rag, Rag, Rag]
basket1.setContents(rags)
console.log("basket1.contents:", basket1.contents) // [Rag, Rag, Rag]

console.log("basket1 area:", basket1.calcArea())
console.log("URL:", basket1.getURL())

const basket2 = new Basket(
  [rag1, rag3, { name: 'apple', type: 'granny smith', rating: 'yum!' }]
)

// basket2: 2 rags and an apple
console.log("basket2 START:", basket2)

basket2.addContents({ name: 'Chocolate Bar', brand: "Hershey", color: "brown" })
console.log("basket2:")
// console.log(basket2.contents.toString())

let myVal = basket2.contents
console.log({ myVal })

console.log("Content items names:", basket2.getContentNames())

/*
Here we create 3 rag objects and 2 baskets, each with different items. Each basket has a "contents" property which is and array can contain any type.

The basket class has several methods including:

- setContents: replaces the contents array completely
- addContents: pushes objects on the the contents array
- calArea: calculates the area from length and width
- getURL: returns the url is in the address bar
- getContentNames: prints a list of names of every item in contents array


*/