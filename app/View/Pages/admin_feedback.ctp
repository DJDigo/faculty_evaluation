<div class="content">
  <div class="content-info">
    <div class="feedback-info">
      <div class="feedback-logo feedback-logo-admin">
        <img src="../img/common/lpnh.png" alt="Staff Image">
        <span>Faculty Evaluation System</span>
      </div>
      <div class="admin-info">
        <span>You're logged in as:</span>
        <span class="admin-name">Administrator</span>
        <button class="logout">Logout</button>
      </div>
    </div>

    <div class="admin-content">
      <ul>
        <li class="admin-link-item">
          <a href="/faculty_evaluation/pages/admin_dashboard">Dashboard</a>
        </li>
        <li class="admin-link-item">
          <a href="/faculty_evaluation/pages/admin_register">Register Teacher/Staff</a>
        </li>
        <li class="admin-link-item">
          <a href="/faculty_evaluation/pages/admin_feedback" class="active">View Feedback</a>
        </li>
      </ul>
      
      <div class="feedback-table">
        <table id="file-list" class="feedback-table-view table-bordered stripe">
          <thead>
            <tr>
              <td class="feedback-table-head">Staff/Teacher Name</td>
              <td class="feedback-table-head">Department</td>
              <td class="feedback-table-head">Date</td>
              <td class="feedback-table-head">Action</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="feedback-table-item">pogi</td>
              <td class="feedback-table-item">Main Folder1</td>
              <td class="feedback-table-item">2018-08-30</td>
              <td class="feedback-table-item">
                <div class="button-view-wrapper">
                  <button class="button-view">View</button>
                </div>
                <div class="button-delete-wrapper">
                  <button class="button-delete">Delete</button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="feedback-table-item">ako</td>
              <td class="feedback-table-item">Main Folder2</td>
              <td class="feedback-table-item">2018-08-30</td>
              <td class="feedback-table-item">
                <div class="button-view-wrapper">
                  <button class="button-view">View</button>
                </div>
                <div class="button-delete-wrapper">
                  <button class="button-delete">Delete</button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="feedback-table-item">File1.jpg</td>
              <td class="feedback-table-item">Main Folder3</td>
              <td class="feedback-table-item">2018-08-30</td>
              <td class="feedback-table-item">
                <div class="button-view-wrapper">
                  <button class="button-view">View</button>
                </div>
                <div class="button-delete-wrapper">
                  <button class="button-delete">Delete</button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="feedback-table-item">File1.jpg</td>
              <td class="feedback-table-item">Main Folder4</td>
              <td class="feedback-table-item">2018-08-30</td>
              <td class="feedback-table-item">
                <div class="button-view-wrapper">
                  <button class="button-view">View</button>
                </div>
                <div class="button-delete-wrapper">
                  <button class="button-delete">Delete</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $('#file-list').dataTable({
      "lengthMenu": [ 10, 50, 100 ],
      "lengthChange": true,
      "searching": true,
      "info": true,
      "iDisplayLength":10,
      'pagingType': 'full_numbers',
  });
</script>