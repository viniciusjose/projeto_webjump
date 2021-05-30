<?php
    /**
     * Realiza todas as implementações das páginas relacionadas a categorias.
     * 
     * Classe responsável por conter toda a regra de negocio da implementação de
     * categorias no sistema.
    **/
    class CategoryController extends Controller{
        /**
         * Página Principal da aplicação
         *
         * Método responsável por realizar a chamada do template e desenhar a pagina inicial
         * de categorias.
         *
         * @param Array $data Todos os dados que serão fornecidos para o front-end da aplicação
         **/
        public function index(){
            $data = [
                'title' => 'Categorias',
                'BASE_URL' => BASE_URL,
                'scriptPage' => 'Category'
            ];
            $this->loadTemplate('Categories', $data);
        }
        /**
         * Página de adição de novas categorias da aplicação
         *
         * Método responsável por realizar a chamada do template e desenhar a pagina de adição
         * de novas categorias no sistema
         *
         * @param Array $data Todos os dados que serão fornecidos para o front-end da aplicação
         **/
        public function addScreen(){
            $data = [
                'title' => 'Adicionar Categoria',
                'BASE_URL' => BASE_URL,
                'scriptPage' => 'add/AddCategoryScreen'
            ];
            $this->loadTemplate('AddCategory', $data);
        }
         /**
         * Página de edição de categorias da aplicação.
         *
         * Método responsável por realizar a chamada do template e desenhar a pagina de edição
         * de novas categorias no sistema e imprimir os dados da categoria cadastradas selecionada.
         *
         * @param Integer $id número de identificação da categoria selecionada.
         * @var Array $data Todos os dados que serão fornecidos para o front-end da aplicação
         **/
        public function editScreen($id)
        {   
            $id = intval($id);
            $cateRepo = new CategoryRepository();
            $dataCategory = $cateRepo->listCategoryById($id);  
            $data = [
                'title' => 'Editar Categoria',
                'BASE_URL' => BASE_URL,
                'scriptPage' => 'edit/EditCategoryScreen',
                'category-code' => $dataCategory['cod_category'],
                'category-name' => $dataCategory['name_category']
            ];
            $this->loadTemplate('EditCategory', $data);
        }
        /**
         * Método de persistência de novas categorias ao banco de dados.
         *
         * Método responsável por receber a requisição ajax do script Category.js, tratar as informações
         * e requisitar a função (insertCategory) de inserção de categoria ao banco de dados que esta localizada
         * na pasta models/CategoryRepository.php
         *
         * @param Boolean $status Responsável pelo retorno para o front-end.
         * @param String $name Nome da categoria recebida pela requisição ajax
         * @param String $cod Código da categoria recebida pela requisição ajax
         * @return Boolean
         **/
        public function addCategory(){
            $status = true;
            $cateRepo = new CategoryRepository();
            $name = ucfirst(addslashes($_POST['category-name']));
            $cod = strtoupper($_POST['category-code']);
            if($cateRepo->insertCategory($cod, $name)){
                echo json_encode($status);
            }else{ 
                $status = false;
                echo json_encode($status);
            }
        }
        /**
         * Função de listagem de categorias
         *
         * Função responsável por receber a requisição ajax e retornar em json
         * todas os dados de categorias cadastradas no banco de dados.
         *
         * @return JSON
         **/
        public function listCategory()
        {
            $jsonCategory = [];    
            $cateRepo = new CategoryRepository();
            $dataCategory = $cateRepo->listCategory(); 
            echo json_encode($dataCategory, JSON_UNESCAPED_UNICODE);
        } 
    }
?>