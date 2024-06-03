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

    private function styles()
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
                padding: 1.5rem;
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
                padding: 0.4rem 1.2rem;
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
            .endButton {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
        </style>
        CSS;
    }

    private function scripts()
    {
        return <<<JS
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        JS;
    }

    private function create($fields)
    {

        $formFields = '';
        foreach ($fields as $field) {
            $required = $field['required'] ? 'required' : '';
            if ($field['type'] === 'textarea') {
                $formFields .= <<<HTML
            <div class="form-group">
                <label for="{$field['id']}">{$field['label']}</label>
                <textarea id="{$field['id']}" name="{$field['name']}" rows="{$field['rows']}" {$required}></textarea>
            </div>
            HTML;
            } else {
                $formFields .= <<<HTML
            <div class="form-group">
                <label for="{$field['id']}">{$field['label']}</label>
                <input type="{$field['type']}" id="{$field['id']}" name="{$field['name']}" {$required}>
            </div>
            HTML;
            }
        }

        return <<<HTML

    <div x-cloak x-data="{ showModal: false }" class="bottom-margin">
        <button @click="showModal = true" class="btn btn-primary">{$this->btnName}</button>
        <div x-show="showModal" x-transition @click.away="showModal = false" @keydown.escape.window="showModal = false" class="modal" :class="{ 'show': showModal }">
            <div class="modal-content">
                <h2>{$this->title}</h2>
                <p>{$this->content}</p>
                <form method="post">
                    {$formFields}
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
                        <h2>Vaccine</h2>
                        <table>
                        <tbody>
                            {$fields}
                        </tbody>
                        </table>
                        <div class="endButton">
                        <button onclick="removeBtn({$data[0]['id']})" @click="showModal = false" class="btn btn-danger">Remove</button>
                            <button @click="showModal = false" class="btn btn-outline-primary">Close</button>
                        </div>
                    </div>
                </div>
                    <a href="#" @click="showModal = true"><i class="entypo-info"></i></a>
            </div>
        HTML;
    }

    public function createModal($fields)
    {
        echo $this->styles();
        echo $this->scripts();
        echo $this->create($fields);
    }

    public function show($data)
    {
        return $this->showData($data);
    }
}
