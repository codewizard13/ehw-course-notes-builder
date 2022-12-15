toggleLid: function (lidStatus) {
  this.lidOpen = lidStatus
}

// Shorthand: harder to read

toggleLid(lidStatus) {
  this.lidOpen = lidStatus
}

///

backpack.lidOpen // false
backpack.toggleLid(true) // undefined 
backpack.lidOpen // true

///

console.log("Left before:", backpack.strapLength.left) // 26
backpack.newStrapLength(10, 15)
console.log("Left after:", backpack.strapLength.left) // 10