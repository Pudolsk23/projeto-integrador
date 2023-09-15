// Função para carregar os comentários na página
function loadComments() {
    // Aqui você pode fazer uma solicitação AJAX para buscar os comentários do servidor
    // e adicionar os comentários à div "comments"
    // Por simplicidade, vamos apenas criar comentários falsos neste exemplo

    const commentsDiv = document.getElementById('comments');
    commentsDiv.innerHTML = '';

    const fakeComments = [
        { name: 'João', comment: 'Ótimo produto!', rating: 5 },
        { name: 'Maria', comment: 'Gostei, mas poderia ser melhor.', rating: 3 },
    ];

    fakeComments.forEach((comment) => {
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        commentElement.innerHTML = `
            <strong>${comment.name}</strong><br>
            Avaliação: ${comment.rating}/5<br>
            ${comment.comment}
            <hr>
        `;
        commentsDiv.appendChild(commentElement);
    });
}

// Evento de envio do formulário
const commentForm = document.getElementById('comment-form');
commentForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Aqui você pode enviar os dados do formulário para o servidor (usando AJAX ou outra técnica)
    // para salvar o comentário no banco de dados

    // Depois de enviar com sucesso, recarregue os comentários
    loadComments();

    // Limpe o formulário
    commentForm.reset();
});

// Carregue os comentários ao carregar a página
loadComments();