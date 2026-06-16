# ImagingCT - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ImagingCT**

## Example ImagingStudy: ImagingCT

**identifier**: [DUI](http://terminology.hl7.org/5.0.0/NamingSystem-dui.html)/urn:oid:1.2.4.7.6.1.35921.32671128.2255.7333 (use: official, )

**status**: Available

**modality**: [DICOM: CT](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html#dicom-dcim-CT) (Computed Tomography)

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**started**: 2025-12-18

**numberOfSeries**: 1

**description**: CT Scan Right Knee



## Resource Content

```json
{
  "resourceType" : "ImagingStudy",
  "id" : "ImagingCT",
  "identifier" : [{
    "use" : "official",
    "system" : "urn:dicom:uid",
    "value" : "urn:oid:1.2.4.7.6.1.35921.32671128.2255.7333"
  }],
  "status" : "available",
  "modality" : [{
    "system" : "http://dicom.nema.org/resources/ontology/DCM",
    "code" : "CT"
  }],
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "started" : "2025-12-18",
  "numberOfSeries" : 1,
  "description" : "CT Scan Right Knee"
}

```
