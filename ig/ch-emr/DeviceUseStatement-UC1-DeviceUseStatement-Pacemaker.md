# UC1-DeviceUseStatement-Pacemaker - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-DeviceUseStatement-Pacemaker**

## Example DeviceUseStatement: UC1-DeviceUseStatement-Pacemaker

Profile: [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md)

**status**: Active

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**timing**: 2015-06-15

**recordedOn**: 2015-06-15

**device**: [Device: status = active; type = Cardiac pacemaker; safety = MR Conditional](Device-UC1-Device-Pacemaker.md)

**bodySite**: Heart



## Resource Content

```json
{
  "resourceType" : "DeviceUseStatement",
  "id" : "UC1-DeviceUseStatement-Pacemaker",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
  },
  "status" : "active",
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "timingDateTime" : "2015-06-15",
  "recordedOn" : "2015-06-15",
  "device" : {
    "reference" : "Device/UC1-Device-Pacemaker"
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
