// Función para editar una publicación
function editPost(button) {
    const post = button.closest('li');
    const postId = post.getAttribute('data-id');
    const currentContent = post.querySelector('.blog-text').textContent;
    const newText = prompt('Edit your post:', currentContent);

    if (newText) {
        fetch('edit_post.php', {
            method: 'POST',
            body: JSON.stringify({ post_id: postId, new_content: newText }),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                post.querySelector('.blog-text').textContent = newText;
            } else {
                alert('Error editing post');
            }
        });
    }
}

// Función para eliminar una publicación
function deletePost(button) {
    const post = button.closest('li');
    const postId = post.getAttribute('data-id');

    if (confirm('Are you sure you want to delete this post?')) {
        fetch('delete_post.php', {
            method: 'POST',
            body: JSON.stringify({ post_id: postId }),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                post.remove();
            } else {
                alert('Error deleting post');
            }
        });
    }
}
