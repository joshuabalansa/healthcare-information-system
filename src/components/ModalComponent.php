<?php
class ModalComponent
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
            [x-cloak]{display:none!important}.modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgb(0 0 0 / .5);justify-content:center;align-items:center;padding:1rem}.modal-content{background:#fff;padding:1.5rem;border-radius:.5rem;box-shadow:0 2px 10px rgb(0 0 0 / .1);width:100%;max-width:500px;margin:auto}.modal.show{display:flex}@media (max-width:600px){.modal-content{padding:.5rem}}.form-group{margin-bottom:1rem}.form-group label{display:block;margin-bottom:.5rem}.form-group input,.form-group textarea{width:100%;padding:.5rem;border:1px solid #ccc;border-radius:.25rem}.form-group textarea{resize:vertical}.btn{padding:.4rem 1.2rem;border:none;border-radius:.25rem;cursor:pointer}.btn+.btn{margin-left:.5rem}.bottom-margin{margin-bottom:10px}.bottom-margin{margin-bottom:10px}.endButton{display:flex;justify-content:center;margin-top:20px}
        </style>
        CSS;
    }

    private function scripts()
    {
        return <<<JS
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        JS;
    }

    private function create($fields, $selectOption)
    {
        $formFields = '';
        foreach ($fields as $field) {
            $required = $field['required'] ? 'required' : '';

            $formFields .= <<<HTML
                <div class="form-group">
                    <label for="{$field['id']}">{$field['label']}</label>
                    <input type="{$field['type']}" id="{$field['id']}" name="{$field['name']}" {$required}>
                </div>
            HTML;
        }

        if(!empty($selectOption)) {

            $options = '';

            foreach($selectOption['options'] as $option) {

              $options .= <<<HTML
                            <option value="{$option['value']}">{$option['label']}</option>
                         HTML;

            }

            $formFields .= <<<HTML

                    <label for="{$selectOption['id']}">{$selectOption['label']}</label>
                    <select class="form-control" name="{$selectOption['name']}" id="{$selectOption['id']}">
                        {$options}
                    </select>
                    <br />
                HTML;
        }

        return <<<HTML

        <div  x-data="{ showModal: false }" class="bottom-margin">
            <button @click="showModal = true" class="btn btn-primary">{$this->btnName}</button>
            <div x-cloak x-show="showModal" x-transition.scale.origin.top @click.away="showModal = false" @keydown.escape.window="showModal = false" class="modal" :class="{ 'show': showModal }">
                <div class="modal-content">
                    <h2>{$this->title}</h2>
                    <p>{$this->content}</p>
                    <form id="form-fields" method="post">
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

            if ($field !== 'id' && $field !== 'user_id' && $field !== 'status') {

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
                        <h2>Method Details</h2>
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
                    <a class='btn btn-info' href="#" @click="showModal = true"><i class="entypo-info"></i></a>
            </div>
        HTML;
    }

    public function createModal($fields, $selectOption)
    {
        echo $this->styles();
        echo $this->scripts();
        echo $this->create($fields, $selectOption);
    }

    public function show($data)
    {
        return $this->showData($data);
    }
}
