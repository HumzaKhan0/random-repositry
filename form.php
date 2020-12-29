<form method="post" action="https://www.hosterpk.com/clientarea/submitticket.php?step=3" enctype="multipart/form-data" role="form">
<input type="hidden" name="token" value="162b203b2a838e54dcaf9655031b805fb2704fd7">

    <div class="row">
        <div class="form-group col-sm-4">
            <label for="inputName">Name</label>
            <input type="text" name="name" id="inputName" value="" class="form-control">
        </div>
        <div class="form-group col-sm-5">
            <label for="inputEmail">Email Address</label>
            <input type="email" name="email" id="inputEmail" value="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-10">
            <label for="inputSubject">Subject</label>
            <input type="text" name="subject" id="inputSubject" value="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="inputDepartment">Department</label>
            <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                                    <option value="3">
                        Sales
                    </option>
                                    <option value="4">
                        Abuse
                    </option>
                                    <option value="6">
                        Billing
                    </option>
                                    <option value="1" selected="selected">
                        Support
                    </option>
                            </select>
        </div>
                <div class="form-group col-sm-3">
            <label for="inputPriority">Priority</label>
            <select name="urgency" id="inputPriority" class="form-control">
                <option value="High">
                    High
                </option>
                <option value="Medium" selected="selected">
                    Medium
                </option>
                <option value="Low">
                    Low
                </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputMessage">Message</label>
        <div class="md-editor" id="1606768371469"><div class="md-header btn-toolbar"><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="glyphicon glyphicon-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button><button class="btn-default btn-sm btn hidden" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button></div><div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="glyphicon glyphicon-search"></span> Preview</button></div><div class="btn-group"><button class="btn-default btn-sm btn open-modal" type="button" title="Help" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHelp" data-hotkey="Ctrl+F1" data-modal-title="Markdown Guide" href="submitticket.php?action=markdown"><span class="fas fa-question-circle"></span> </button></div><div class="md-controls"><a class="md-control md-control-fullscreen" href="https://www.hosterpk.com/clientarea/submitticket.php?step=2&amp;deptid=1#"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div><textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor md-input" data-auto-save-name="client_ticket_open" style="resize: vertical;"></textarea><div class="md-footer"><div id="inputMessage-footer" class="markdown-editor-status"><div class="small-font">lines: 0&nbsp;&nbsp;&nbsp;words: 0&nbsp;&nbsp;&nbsp;<span class="markdown-save">saved</span></div></div></div><div class="md-fullscreen-controls"><a href="https://www.hosterpk.com/clientarea/submitticket.php?step=2&amp;deptid=1#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div>
    </div>

    <div class="row form-group">
        <div class="col-sm-12">
            <label for="inputAttachments">Attachments</label>
        </div>
        <div class="col-sm-9">
            <input type="file" name="attachments[]" id="inputAttachments" class="form-control">
            <div id="fileUploadsContainer"></div>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-default btn-block" onclick="extraTicketAttachment()">
                <i class="fas fa-plus"></i> Add More
            </button>
        </div>
        <div class="col-xs-12 ticket-attachments-message text-muted">
            Allowed File Extensions: .jpg, .gif, .jpeg, .png, .doc, .xls, .docx, .xlsx, .pdf
        </div>
    </div>

    <div id="customFieldsContainer">
            </div>

    <div id="autoAnswerSuggestions" class="well hidden"></div>

    <div class="text-center margin-bottom">
            </div>

    <p class="text-center">
        <input type="submit" id="openTicketSubmit" value="Submit" class="btn btn-primary">
        <a href="https://www.hosterpk.com/clientarea/supporttickets.php" class="btn btn-default">Cancel</a>
    </p>

</form>