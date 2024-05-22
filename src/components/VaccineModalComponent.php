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
           
            [x-cloak] { display: none !important; }
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
        <div x-cloak x-data="{ showModal: false }" class="bottom-margin">
            <button @click="showModal = true" class="btn btn-info">{$this->btnName}</button>

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
                                <input type="text" id="doses" name="doses">
                            </div>
                            <div class="form-group">
                                <label for="approved_ages">Approved Ages</label>
                                <input type="text" id="approved_ages" name="approved_ages">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="4"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" @click="showModal = false" class="btn btn-outline-primary">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        HTML;
    }

    private function showData($data)
    {
        $fields = '';
        foreach ($data[0] as $field => $value) {
            if ($field !== 'id') {

                $field = ucwords(str_replace('_', ' ', $field));

                $fields .= "<tr>
                        <th scope='row'>{$field}</th>
                        <td>{$value}</td>
                        </tr>";
            }
        }
        return <<<HTML
            <div x-cloak x-data="{ showModal: false }">
            
            <div x-show="showModal" x-transition @click.away="showModal = false" @keydown.escape.window="showModal = false" class="modal" :class="{ 'show': showModal }">
                <div class="modal-content">
                    <h2>All Information</h2>
                    <table>
                    <tbody>
                        {$fields}
                    </tbody>
                    </table>
                    <button @click="showModal = false" class="btn btn-outline-primary">Close</button>
                </div>
                </div>
                <button @click="showModal = true" class="btn btn-primary">Info</button>
        </div>
        HTML;
    }

    public function createModal()
    {
        echo $this->renderStyles();
        echo $this->renderScripts();
        echo $this->renderModal();
    }

    public function show($data)
    {
        return $this->showData($data);
    }
}
