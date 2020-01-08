<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header"> <strong>List</strong> Product Ratings </div>
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th class="text-center align-middle" style="width:5%">ID</th>
                    <th class="text-center align-middle" style="width:25%">Product Name</th>
                    <th class="text-center align-middle" style="width:10%">Rating</th>
                    <th class="text-center align-middle" style="width:10%">Quantity</th>
                    <th class="text-center align-middle" style="width:40%">Feedback</th>
                    <th class="text-center align-middle" style="width:10%">Rated at</th>
                  </tr>
                </thead>
                <tbody>
          <?php foreach ($ratings as $rating) { ?>
          <tr>
            <td class="text-center align-middle">
              <div> <?=$rating->id;?> <div>
            </td>
            <td class="align-middle">
              <div><?=$rating->productname;?><div>
            </td>
            <td class="text-center align-middle">
              <div><input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-readonly value="<?=$rating->rating;?>"/></div>
            </td>
            <td class="text-center align-middle">
              <div><?=$rating->count;?><div>
            </td>
            <td class="text-center align-middle">
              <div><?=$rating->feedback;?><div>
            </td>
            <td class="text-center align-middle">
              <div><?=$rating->create_at;?><div>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>