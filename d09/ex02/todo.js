function insertText() {
	let input = prompt("Add a note!");
	if (input === "" || input === null)
		return ;
	addTask(input);
}

function addTask(input) {
	let newTask = document.createElement('div');
	let taskText = document.createTextNode(input);
	newTask.appendChild(taskText);
	ft_list.prepend(newTask);
	newTask.setAttribute("onclick", "removeTask(this)");
}

function removeTask(gone) {
	if (confirm('Are you sure you want to remove this TO-DO?')) {
	let del = document.getElementById('ft_list');
	del.removeChild(gone);
	}
}

//	LOAD COOKIES
window.onload = function ()
{
	document.getElementById("button").addEventListener("click", addTodo);
	ft_list = document.getElementById("ft_list");
	var get = getCookie("todos");
	console.log(JSON.parse(get));
	cookie = JSON.parse(get);
	cookie.forEach(function (e)
	{
		addEntry(e);	
	})
}

// SET COOKIES
window.onunload = function() {
	let entry =  document.getElementById("ft_list").children;
	let newCookie = [];
	for (let i = 0; i < entry.length; i++) {
		newCookie.unshift(entry[i].innerHTML);
	}
	var toset = JSON.stringify(newCookie);
	setCookie("todos", toset, 1);
}

function setCookie(cname,cvalue,exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires=" + d.toGMTString();
	var string = cname + "=" + cvalue + ";" + expires + ";path=/";
	document.cookie = string; 
}
