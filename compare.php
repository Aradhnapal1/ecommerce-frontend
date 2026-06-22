<?php include 'header.php'; ?>

    <!-- ========== Breadcrumb Section Start ========== -->
    <div class="container py-12">
      <div class="breadcrumb">
        <ul>
          <li>
            <a href='index.php'>
              <span class="inline-flex items-center justify-center">
                <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i></span
              >Home</a>
          </li>
          <li class="text-light-disabled-text">&#8226;</li>
          <li><span class="text-sm leading-[22px]">Compare</span></li>
        </ul>
      </div>
    </div>
    <!-- ========== Breadcrumb Section End ========== -->

    <!-- ========== Compare Table Section Start ========== -->
    <div class="pb-[70px]">
      <div class="container">
        <div class="flex items-start md:items-center justify-between flex-col md:flex-row gap-y-5 mb-6">
          <div>
            <h3>Compare Products</h3>
          </div>
          <div class="flex items-center gap-x-6">
            <p id="compare-item-count" class="font-semibold text-light-primary-text">0 products</p>
            <button type="button" id="clear-compare-btn"
              class="text-primary text-base leading-[26px] font-semibold hover:underline">
              Clear All
            </button>
          </div>
        </div>
        <div class="grid grid-cols-12">
          <div class="col-span-12">
            <div class="wishlist-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
              <table class="w-full compare-table">
                <tbody id="compare-table-body">
                  <tr>
                    <td colspan="5" class="text-center py-10 text-light-secondary-text">
                      Loading compare list...
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== Compare Table Section End ========== -->

<?php include 'footer.php'; ?>
