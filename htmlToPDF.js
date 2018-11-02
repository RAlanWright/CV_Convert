import 'html2canvas';
import 'jspdf';

function print() {
		const filename  = 'TestResume.pdf';

		html2canvas(document.querySelector('#nodeToRenderAsPDF')).then(canvas => {
			let pdf = new jsPDF('p', 'mm', 'a4');
			pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 211, 298);
			pdf.save(filename);
		});
	}
