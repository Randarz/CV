function addComment(event) {
    event.preventDefault(); 
  
    var commentInput = document.getElementById('commentInput');
    var commentText = commentInput.value;
    
    if (commentText.trim() !== '') {
        var commentsDiv = document.getElementById('comments');
        var newComment = document.createElement('div');
        newComment.className = 'comment';
        newComment.textContent = commentText;
        commentsDiv.appendChild(newComment);
        commentInput.value = '';
  
        // Send data to server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_comment.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log('Comment saved successfully');
            }
        };
        xhr.send('comment=' + encodeURIComponent(commentText));
    }
 }
 