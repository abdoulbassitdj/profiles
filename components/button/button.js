class Button extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<button class="btn">
                            <p><a href="http:#">Se connecter</a></p>
                        </button>`;
    }
}

customElements.define('main-button', Button);