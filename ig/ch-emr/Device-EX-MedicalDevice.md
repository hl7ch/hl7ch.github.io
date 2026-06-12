# EX-MedicalDevice - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-MedicalDevice**

## Example Device: EX-MedicalDevice

Profile: [CH Emergency Record Device](StructureDefinition-ch-emr-device.md)

**status**: Active

**type**: Cardiac pacemaker

**patient**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "EX-MedicalDevice",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
  },
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "14106009"
    }]
  },
  "patient" : {
    "reference" : "Patient/EX-Patient"
  }
}

```
