
document.getElementById('viewResumeBtn').addEventListener('click', function() {
    // URL of the resume file (PDF, DOCX, etc.)
    const resumeUrl = './assets/img/Md_Shakil_Resume.pdf'; // Change this to the actual path of your resume

    // Open the resume in a new tab
    window.open(resumeUrl, '_blank'); // '_blank' opens the link in a new tab 

    // Create a temporary link element to trigger the download 

    const link = document.createElement('a');
    link.href = resumeUrl;
    link.download = 'Md_Shakil_Resume.pdf'; // The name of the file to be downloaded
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link); 
});
