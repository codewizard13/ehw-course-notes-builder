// Rag.js

/**
 * Rag.js
 * 
 * Programmer: Eric Hepperle
 * Date: 2022-11-23
 * 
 * Purpose: Class to represent rags for OOP in JavaScript
 */

class Rag {
  constructor(
    name,
    color,
    height,
    width
  ) {
    this.name = name
    this.color = color
    this.height = height
    this.width = width
  }

  setName(newName) {
    this.name = newName
  }
  setColor(newColor) {
    this.color = newColor
  }
  logRagInfo() {
    let styles = [
      `font-weight: bold`,
      `padding: 1em`,
      `color: ${this.color}`,
    ]

    let style = styles.join('; ') + ';'

    if (this.color === 'yellow') {
      style += `background: #777;`
    } else {
      style += `background: #EEE; `
    }

    let ragInfo =
      `\t* Color: ${this.color} \n` +
      `\t* Size: W: ${this.width}, H: ${this.height}`

    console.log(
      "%cRAG INFO for: %s",
      style, this.name
    )
  }
}

export default Rag


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

// const rag = {
//   color: 'yellow',
//   height: 8,
//   width: 8,
// }

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


