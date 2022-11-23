/**
 * Creating classes:
 * 
 * Class declaration: class Name {}
 * Class expression: const Name = class {}
 */

// class Backpack {
//   constructor(
//     // Define parameters
//     name,
//     volume,
//     color,
//     pocketNum,
//     strapLengthL,
//     strapLengthR,
//     lidOpen
//   ) {
//     // Define properties:
//     this.name = name
//     this.volume = volume
//     this.color = color
//     this.pocketNum = pocketNum
//     this.strapLength = {
//       left: strapLengthL,
//       right: strapLengthR,
//     }
//     this.lidOpen = lidOpen
//   }
//   // Add methods like normal functions:
//   toggleLid(lidStatus) {
//     this.lidOpen = lidStatus
//   }
//   newStrapLength(lengthLeft, lengthRight) {
//     this.strapLength.left = lengthLeft
//     this.strapLength.right = lengthRight
//   }
// }

// export default Backpack



/**
 * Create a Backpack object.
 */

// import Backpack from "./Backpack.js"

// const everydayPack = new Backpack(
//   "Everyday Backpack",
//   30,
//   "grey",
//   15,
//   26,
//   26,
//   false
// )

// console.log("The everydayPack object:", everydayPack)
// console.log("The pocketNum value:", everydayPack.pocketNum)

function Backpack(
  name,
  volume,
  color,
  pocketNum,
  strapLengthL,
  strapLengthR,
  lidOpen
) {
  this.name = name
  this.volume = volume
  this.color = color
  this.pocketNum = pocketNum
  this.strapLength = {
    left: strapLengthL,
    right: strapLengthR,
  }
  this.toggleLid = function (lidStatus) {
    this.lidOpen = lidStatus
  }
  this.newStrapLength = function (lengthLeft, lengthRight) {
    this.strapLength.left = lengthLeft
    this.strapLength.right = lengthRight
  }
}

const everydayPack = new Backpack(
  "Everyday Backpack",
  30,
  "grey",
  15,
  26,
  26,
  false
)

console.log("The everydayPack object:", everydayPack)
console.log("The pocketNum value:", everydayPack.pocketNum)



















