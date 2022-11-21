// SELECTOR VARS
sel_chGroups = '.classroom-toc-section'
// sel_subchGroup = '.classroom-toc-section__items'
sel_subchapter = '.classroom-toc-item__title'


/* ALGORITHM

Find all chapter groups

Foreach chapter group

  Find chapter name. Print

  Find the subchapter group (UL?)
  
    Find all subchapter names
    
    Print
  

*/

var colorChap = 'cadetblue'
var colorSubch = 'forestgreen'

var chStyle = `color: ${colorChap}; font-weight:bold`
var subStyle = `color: ${colorSubch}`

chGroups = document.querySelectorAll(sel_chGroups)

chGroups.forEach(function (chGroup, c) {
  
  ch_name = chGroup.querySelector('h2').innerText
  
  // Add numbers to chapter titles without numbers
  if (c === 0) {
    console.log(`%c### ${c}. ${ch_name}`, chStyle)
  } else if (c === chGroups.length-1) {
    console.log(`%c### ${chGroups.length-1}. ${ch_name}`, chStyle)    
  } else {
    console.log(`%c### ${ch_name}`, chStyle)
  }

  subchGroup = chGroup.querySelectorAll(sel_subchapter)

  
  subchGroup.forEach((subchapter, s) => {

    subchName = subchapter.firstChild.wholeText.trim()
    
    
    if (subchName != '' && subchName != null) {
      console.log(`%c  #### ${c}.${s} ${subchName}`, subStyle)
    }
    
  })
  
  
})