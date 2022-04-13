@extends('Template.master')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
    <h1 class="h2 mr-2">Ubah Absensi</h1>
     
</div>
<hr>
              <form role="form" id="quickForm" method="POST" action="">
              @include('absensi.form',['tombol' => 'Tambah'])
              </form>

             <hr>
    <table class="table table-responsive">
        <thead>
            <th>NIK</th>
            <th>Nama</th>
            <th>Periode</th>
            <th>23</th>
            <th>24</th>
            <th>25</th>
            <th>26</th>
            <th>27</th>
            <th>28</th>
            <th>29</th>
            <th>30</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
            <th>22</th>
        </thead>
        <tbody>
            <tr id="tr">
                <td>5009</td>
                <td>Irfan Nur Muhammad</td>
                <td>April</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>L</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>L</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>L</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>NS</td>
                <td>L</td>
                <td>NS</td>
                <td>NS</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection