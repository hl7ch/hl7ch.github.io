# Laboratory Order - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laboratory Order**

## Example ServiceRequest: Laboratory Order

**status**: Active

**intent**: Order

**category**: Anforderung von Laboruntersuchungen

**priority**: Routine

**code**: Creatinine renal clearance in 24 hour Urine and Serum or Plasma

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-ElisabethBroennimannByBFH.md)

**requester**: [PractitionerRole Physician](PractitionerRole-HPWengerRole.md)

**insurance**: [Coverage: identifier = urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590; status = active](Coverage-CoverageBroennimann.md)



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "LabOrder",
  "status" : "active",
  "intent" : "order",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-term/CodeSystem/servicerequest-category",
          "code" : "RequestForLabExam",
          "display" : "Anforderung von Laboruntersuchungen"
        }
      ]
    }
  ],
  "priority" : "routine",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "2164-2",
        "display" : "Creatinine renal clearance in 24 hour Urine and Serum or Plasma"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "requester" : {
    "reference" : "PractitionerRole/HPWengerRole"
  },
  "insurance" : [
    {
      "reference" : "Coverage/CoverageBroennimann"
    }
  ]
}

```
