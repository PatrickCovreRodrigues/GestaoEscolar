function toggleView(view) {
            const formulario = document.getElementById('formulario');
            const listagem = document.getElementById('listagem');
            const tabCadastrar = document.getElementById('tab-cadastrar');
            const tabListar = document.getElementById('tab-listar');

            formulario.style.display = 'none';
            listagem.style.display = 'none';

            if (view === 'cadastrar') {
                formulario.style.display = 'block';
                tabCadastrar.classList.add('active-tab');
                tabListar.classList.remove('active-tab');
            } else {
                listagem.style.display = 'block';
                tabListar.classList.add('active-tab');
                tabCadastrar.classList.remove('active-tab');
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            toggleView('cadastrar');
});