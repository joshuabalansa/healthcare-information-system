<?php
class CreateVaccineModal
{
    private $btnName;
    private $title;
    private $content;

    public function __construct($btnName, $title, $content)
    {
        $this->btnName = $btnName;
        $this->title = $title;
        $this->content = $content;
    }

    private function renderStyles()
    {
        return <<<CSS
        <style>
            /* Basic styles for the modal */
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                padding: 1rem;
            }

            .modal-content {
                background: white;
                padding: 1rem;
                border-radius: 0.5rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 500px;
                margin: auto;
            }

            .modal.show {
                display: flex;
            }

            @media (max-width: 600px) {
                .modal-content {
                    padding: 0.5rem;
                }
            }

            .form-group {
                margin-bottom: 1rem;
            }

            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
                padding: 0.5rem;
                border: 1px solid #ccc;
                border-radius: 0.25rem;
            }

            .form-group textarea {
                resize: vertical;
            }

            .btn {
                padding: 0.6rem 1.6rem;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
            }

            .btn + .btn {
                margin-left: 0.5rem;
            }
            .bottom-margin {
                margin-bottom: 10px;
            }
            .bottom-margin {
                margin-bottom: 10px;
            }
        </style>
        CSS;
    }

    private function renderScripts()
    {
        return <<<JS
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        JS;
    }

    private function renderModal()
    {
        return <<<HTML
        <div x-data="{ showModal: false }" class="bottom-margin">
            <button @click="showModal = true" class="btn btn-primary">{$this->btnName}</button>

                <div x-show="showModal" x-transition @click.away="showModal = false" @keydown.escape.window="showModal = false" class="modal" :class="{ 'show': showModal }">
                    <div class="modal-content">
                        <h2>{$this->title}</h2>
                        <p>{$this->content}</p>
                        <form method="post">
                            <div class="form-group">
                                <label for="vaccine_name">Vaccine Name</label>
                                <input type="text" id="vaccine_name" name="vaccine_name" required>
                            </div>
                            <div class="form-group">
                                <label for="abbreviation">Abbreviation</label>
                                <input type="text" id="abbreviation" name="abbreviation" required>
                            </div>
                            <div class="form-group">
                                <label for="manufacturer">Manufacturer</label>
                                <input type="text" id="manufacturer" name="manufacturer" required>
                            </div>
                            <div class="form-group">
                                <label for="doses">Doses</label>
                                <input type="text" id="doses" name="doses" required>
                            </div>
                            <div class="form-group">
                                <label for="approved_ages">Approved Ages</label>
                                <input type="text" id="approved_ages" name="approved_ages" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="4" required></textarea>
                            </div>
                            <div>
                                <button type="submit" @click="showModal = false" class="btn btn-primary">Save</button>
                                <button type="button" @click="showModal = false" class="btn btn-outline-primary">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        HTML;
    }

    public function render()
    {
        echo $this->renderStyles();
        echo $this->renderScripts();
        echo $this->renderModal();
    }
}
