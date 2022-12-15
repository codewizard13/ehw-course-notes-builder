// script.js (with object constructor)

/* Object constructor example */

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