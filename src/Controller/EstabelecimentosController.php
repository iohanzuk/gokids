<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Estabelecimentos Controller
 *
 * @property \App\Model\Table\EstabelecimentosTable $Estabelecimentos
 *
 * @method \App\Model\Entity\Estabelecimento[] paginate($object = null, array $settings = [])
 */
class EstabelecimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $estabelecimentos = $this->Estabelecimentos->find('all')
            ->contain(['Categorias','Users']);
        if($this->request->is('POST')){
            if(!empty($this->request->getData('categoria_id')))
                $estabelecimentos->andWhere(['Estabelecimentos.categoria_id'=>$this->request->getData('categoria_id')]);
        }
        $categorias = $this->Estabelecimentos->Categorias->find('list');
        $this->set(compact('estabelecimentos','categorias'));
        $this->set('_serialize', ['estabelecimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Avaliacaos');
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => ['Categorias', 'Users', 'Avaliacaos', 'EstabelecimentoCaracteristicas' => ['Caracteristicas']]
        ]);
        $avaliacaos = $this->Avaliacaos->find('all')->where(['Avaliacaos.estabelecimento_id'=>$estabelecimento->id])
            ->order(['created' => 'DESC']);

        $this->set(compact('estabelecimento','avaliacaos'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Caracteristicas');
        $this->loadModel('EstabelecimentoCaracteristicas');
        $estabelecimento = $this->Estabelecimentos->newEntity();
        $caracteristicas = $this->Caracteristicas->find('list');
        if ($this->request->is('post')) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->data);
            if ($this->Estabelecimentos->save($estabelecimento)) {
                if(!empty($this->request->getData('caracteristica_id'))){
                    $carac = $this->request->getData('caracteristica_id');
                    foreach ($carac as $c){
                        $est_carac = $this->EstabelecimentoCaracteristicas->newEntity();
                        $est_carac->caracteristica_id = $c;
                        $est_carac->estabelecimento_id = $estabelecimento->id;
                        $this->EstabelecimentoCaracteristicas->save($est_carac);
                    }
                }
                $this->Flash->success(__('O {0} foi salvo.', 'Estabelecimento'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento'));
            }
        }
        $categorias = $this->Estabelecimentos->Categorias->find('list', ['limit' => 200]);
        $users = $this->Estabelecimentos->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'categorias', 'users', 'caracteristicas'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->data);
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estabelecimento'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estabelecimento'));
            }
        }
        $categorias = $this->Estabelecimentos->Categorias->find('list', ['limit' => 200]);
        $users = $this->Estabelecimentos->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'categorias', 'users'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estabelecimento = $this->Estabelecimentos->get($id);
        if ($this->Estabelecimentos->delete($estabelecimento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Estabelecimento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Estabelecimento'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function fill()
    {
        $this->viewBuilder()->setLayout('ajax');

        $termo = $this->request->getData('termo');
        $size = $this->request->getData('size');
        $aux = $this->request->getData('page');
        $page = ((!isset($aux) || $aux < 1) ? 1 : $aux);

        if (!isset($termo))
            $termo = '';
        if (!isset($size) || $size < 1)
            $size = 10;

        $query = $this->Estabelecimentos->find('all')
            ->where(['Estabelecimentos.nome LIKE ' => '%' . $termo . '%']);
        $cont = $query->count();

        $ret["more"] = (($size * ($page - 1)) >= (int)$cont) ? false : true;
        $ret["total"] = $cont;
        $ret["dados"] = array();

        $query->limit($size);
        $query->offset($size * ($page - 1));

        foreach ($query as $d) {
            $ret["dados"][] = array('id' => $d->id, 'text' => $d->nome);
        }
        echo json_encode($ret);

        $this->autoRender = false;
    }
}
