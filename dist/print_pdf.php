<div id="test">
    hell omr nddsiwx
    xnudnw
    njsnxsw
    nxisnx;mw'
    zqnxsknxkwlw
</div>

<button type="submit" class="mr-3 text-white" id="btnExport" style="background: maroon" name="all"><b>Export To PDF</b></button>
        <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#test')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        });
    </script>