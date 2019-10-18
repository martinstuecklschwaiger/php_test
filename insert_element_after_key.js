/*!
 * Add a new item to an object
 * @param  {Object} obj   The original object
 * @param  {String} key   The key for the item to add
 * @param  {Any}    value The value for the new key to add
 * @param  {Number} index The position in the object to add the new key/value pair [optional]
 * @return {Object}       An immutable clone of the original object, with the new key/value pair added
 */
var addArrayElelementAfrerKey = function (obj, key, value, index=null) {

	// Create a temp object and index variable
	var temp = {};
	var i = 0;

	if((key in obj)){
		obj[key] = value;
	}

	// Loop through the original object
	for (var prop in obj) {
		if (obj.hasOwnProperty(prop)) {
			// If the indexes match, add the new item
			if (i === index+1 && key && value) {
				temp[key] = value;
			}

			// Add the current item in the loop to the temp obj
			temp[prop] = obj[prop];
			// Increase the count
			i++;
		}
	}

	// If no index, add to the end
	if (!index && key && value) {
		
	}

	return temp;

};

// Original object
var country = {
  austria: 'vienna',
  french: 'peris',
};

var afterKey=0

// Add to the end of the object
var result = addArrayElelementAfrerKey(country, 'india', 'newdelhi', afterKey);
console.log(result);
