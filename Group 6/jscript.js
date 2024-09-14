function showMemberInfo(name, role, image, age, birthday, sex) {
    document.getElementById('modal-name').innerText = name;
    document.getElementById('modal-role').innerText = 'Role: ' + role;
    document.getElementById('modal-image').src = image;
    document.getElementById('modal-age').innerText = 'Age: ' + age;
    document.getElementById('modal-birthday').innerText = 'Birthday: ' + birthday;
    document.getElementById('modal-sex').innerText = 'Sex: ' + sex;

    document.getElementById('member-modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('member-modal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('member-modal')) {
        closeModal();
    }
};
