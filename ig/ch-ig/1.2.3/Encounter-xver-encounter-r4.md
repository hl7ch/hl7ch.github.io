# Cross-Version Encounter R4 - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cross-Version Encounter R4**

## Example Encounter: Cross-Version Encounter R4

**Cross-version Extension for R5.Encounter.subjectStatus for use in FHIR R4**: Follow-up

**status**: finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.0/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Petra Meier (no stated gender), DoB Unknown](Patient-PetraMeier.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "xver-encounter-r4",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-Encounter.subjectStatus",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/research-subject-state",
            "code" : "follow-up",
            "display" : "Follow-up"
          }
        ],
        "text" : "Follow-up"
      }
    }
  ],
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  }
}

```
