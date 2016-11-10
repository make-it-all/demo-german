<form action="/problems?flash=Problem+Created" method="POST" class="with_panels">

  <div id="main_form_panel">




    <div class="field">
      <label>Problem ID</label>
      <input type="text" name="name" value="325"/>
    </div>
    <div class="field">
      <label>Call Time</label>
      <input type="text" name="name" value="Oct 3 2016, 9.00am"/>
    </div>
    <div class="field">
      <label>Software</label>
      <input type="text" name="name" value="Windows 8"/>
    </div>
    <div class="field">
      <label>Hardware</label>
      <input type="text" name="name" value="Printer"/>
    </div>
    <div class="actions">
      <input type="submit" name="commit" value="Create Problem"/ >
    </div>
  </div>

  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2">
      <input type="radio" class="tab_controller" name="tab" id="tab_3">
      <input type="radio" class="tab_controller" name="tab" id="tab_4">
      <input type="radio" class="tab_controller" name="tab" id="tab_5">
      <div class="tab_heads_container">
        <label for="tab_1">Caller Information</label>
        <label for="tab_2">Description</label>
        <label for="tab_3">Notes</label>
        <label for="tab_4">Specialist</label>
        <label for="tab_5">Solution</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <div class="field">
            <label>Name</label>
            <input type="text" name="name" value="George Formby"/>
          </div>
          <div class="field">
            <label>Department</label>
            <input type="text" name="name" value="Cleaning"/>
          </div>
          <div class="field">
            <label>Extention Number</label>
            <input type="text" name="name" value="23456"/>
          </div>
        </div>
        <div class="tab_panel">
          <div class="field">
            <input type="text" name="name" value="Enter Description"/>
          </div>
          <select multiple="multiple">
            <option value="microsoft office">Microsoft Office</option>
            <option value="microsoft office">Microsoft Word</option>
            <option value="microsoft office">Microsoft Word Printing</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Styling</option>
            <option value="microsoft office">Microsoft Excel</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Formulas</option>
          </select>
        </div>
        <div class="tab_panel">
          <div class="field">
            <input type="text" name="name" value="Enter Notes"/>
          </div>
        </div>
        <div class="tab_panel">
          <select multiple="multiple">

          </select>
        </div>
      </div>
    </div>


  </div>

</form>
