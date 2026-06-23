function calculateAverage() {

    var marks1 =
        parseFloat(document.getElementById("marks1").value);

    var marks2 =
        parseFloat(document.getElementById("marks2").value);

    var marks3 =
        parseFloat(document.getElementById("marks3").value);

    if (
        isNaN(marks1) ||
        isNaN(marks2) ||
        isNaN(marks3)
    ) {
        alert("Please fill all mark fields.");
        return;
    }

    let min = Math.min(marks1, marks2, marks3);

    let total = marks1 + marks2 + marks3;

    let average = (total - min) / 2;

    alert("Average Marks: " + average);
}