<?php

namespace App\Http\Livewire\Admin\Ligne;

use App\Models\Ligne;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $ligne_id;

    public function deleteLigne($ligne_id) {
        $this->ligne_id = $ligne_id;
    }

    public function destroyLigne()
    {
        $ligne = Ligne::find($this->ligne_id);

        $ligne->delete();
        session()->flash('message', 'Supprimer avec success');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $lignes = Ligne::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.ligne.index', ['lignes' => $lignes]);
    }
}
