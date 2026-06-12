# EX-DeviceUseStatement - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-DeviceUseStatement**

## Example DeviceUseStatement: EX-DeviceUseStatement

Profile: [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md)

**status**: Active

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**timing**: 2023-01-15

**recordedOn**: 2023-01-15

**device**: [Device: status = active; type = Cardiac pacemaker](Device-EX-MedicalDevice.md)

**bodySite**: Heart



## Resource Content

```json
{
  "resourceType" : "DeviceUseStatement",
  "id" : "EX-DeviceUseStatement",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
  },
  "status" : "active",
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "timingDateTime" : "2023-01-15",
  "recordedOn" : "2023-01-15",
  "device" : {
    "reference" : "Device/EX-MedicalDevice"
  },
  "bodySite" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "80891009"
    }]
  }
}

```
